<template>
    <div>
      <!-- Header -->
      <div class="header">
        <h1 class="page-title">CÁC LOẠI PHÒNG</h1>
      </div>
  
      <!-- Room Categories -->
      <section class="room-types">
        <div class="room-card" v-for="room in rooms" :key="room.id">
          <img :src="room.image" :alt="room.name" class="room-image" />
          <div class="room-info">
            <h3>{{ room.name }}</h3>
            <p>{{ room.description }}</p>
            <button  data-bs-toggle="modal" data-bs-target="#datphongModel" @click="Object.assign(dat, room)">Đặt phòng ngay</button>
          </div>
        </div>
      </section>
    </div>
    <!--DAT PHONG  Modal -->
<div class="modal fade" id="datphongModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Đặt phòng</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-lg-12">
                <label for="">Tên loại phòng</label><input type="text" v-model="dat.name" readonly class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <label class="mb-2" for="">Tên khách hàng</label>
                <input type="text" class="form-control" placeholder="Nhập tên khách hàng...." v-model="dat.ten_kh">
            </div>
            <div class="col-lg-6">
                <label class="mb-2" for="">Số điện thoại</label>
                <input type="number" class="form-control" placeholder="Nhập số điện thoại...." v-model="dat.phone">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6">
                <label class="mb-2" for="">Ngày nhận phòng</label>
                <input type="date" class="form-control"  v-model="dat.ngay_nhan">
            </div>
            <div class="col-lg-6">
                <label class="mb-2" for="">Ngày trả phòng</label>
                <input type="date" class="form-control" v-model="dat.ngay_tra">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" @click="acceptDP()">Đặt phòng</button>
      </div>
    </div>
  </div>
</div>
  </template>
  
  
  <script>
  import axios from 'axios';
  export default {
    data() {
      return {
        rooms: [], // Dữ liệu phòng sẽ được fetch từ API Laravel
        dat: []
      };
    },
    created() {
      this.fetchRooms();
    },
    methods: {
      fetchRooms() {
        axios
          .get('http://127.0.0.1:8000/api/khach-hang/loai-phong')
          .then((response) => {
            this.rooms = response.data.data;
          })
          .catch((error) => {
            console.error("Error fetching rooms:", error);
          });
      },
      acceptDP()
      {
        axios
            .post('http://127.0.0.1:8000/api/khach-hang/dat-phong', {
                loai_phong : this.dat.name,
                ten_kh : this.dat.ten_kh,
                phone : this.dat.phone,
                ngay_nhan : this.dat.ngay_nhan,
                ngay_tra : this.dat.ngay_tra
            }, {
                
            })
      }
    }
  };
  </script>
  
  <style scoped>
  .header {
    text-align: center;
    padding: 20px 0;
    background-color: #002147;
    color: white;
  }
  
  .page-title {
    font-size: 2rem;
    font-weight: bold;
    color: aqua;
  }
  
  .room-types {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px;
    justify-content: center;
  }
  
  .room-card {
    width: 300px;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(182, 12, 12, 0.2);
  }
  
  .room-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }
  
  .room-info {
    padding: 10px;
    text-align: center;
  }
  
  .room-info h3 {
    font-size: 1.5rem;
    margin-bottom: 10px;
    color: aqua;
  }
  
  .room-info p {
    font-size: 1rem;
    color: #30a0db;
  }
  
  button {
    background-color: #ff4500;
    color: white;
    border: none;
    padding: 10px 20px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 5px;
  }
  
  button:hover {
    background-color: #e63900;
  }
  </style>
  