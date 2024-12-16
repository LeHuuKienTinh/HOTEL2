<template>
  <div class="top" style="background-color: black; height: 80px;">
    <div class="container"
      style="background-color: black; height: 100%; display: flex;  align-items: center; box-sizing: border-box;">
      <img width="190"
        src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/75/2024/03/23022929/NSC-Logo-1-Line-Blue.png"
        alt="Novotel Saigon Centre"
        style="font-family: Arial, sans-serif !important; margin-top: 0;display:inline-block;">
      <h2
        style="width: 100%;;color: blue; width: 662px; display: inline-block; justify-content: center; align-items: center; text-align: center; margin: 0 20px;">
        NOVOTEL SAIGON CENTRE</h2>
      <p style="color: aliceblue; text-align: center; margin-bottom: 0;">Xin chào <router-link to="/khach-hang/profile">{{user}}</router-link> </p>
      <button class="btn color-change-text"
        style="margin-left: 10px; background-color: red;color: white; padding: 13px;">ĐẶT PHÒNG NGAY!</button>
      <button @click="logOut()" class="btn" style="margin-left: 10px; background-color: gray;color: white;">Đăng
        xuất</button>
    </div>
  </div>
</template>
<script>
import { createToaster } from "@meforma/vue-toaster";
const toaster = createToaster({ position: "top-right" });
import axios from 'axios';
export default {
  data() {
    return {
      user: {}
    }
  },
  mounted() {
    this.getDataUser()
  },
  methods: {
    logOut() {
      axios
        .post('http://127.0.0.1:8000/api/admin/logout', {}, {
          headers: {
            Authorization: `Bearer ${localStorage.getItem('key_khach_hang')}`, // Gửi token hiện tại
          },
        })
        .then((res) => {
          if (res.data.status) {
            localStorage.removeItem('key_khach_hang'); // Xóa token khỏi localStorage
            toaster.success(res.data.message); // Hiển thị thông báo thành công

            // Chờ 2 giây trước khi chuyển hướng
            setTimeout(() => {
              window.location.href = '/khach-hang/dang-nhap'; // Chuyển hướng về trang đăng nhập
            }, 1000);
          } else {
            toaster.error(res.data.message); // Hiển thị thông báo thành công
          }
        })
    },
    getDataUser() {
      axios
        .get('http://127.0.0.1:8000/api/admin/khach-hang/data-user', {
          headers: {
            Authorization: `Bearer ` + localStorage.getItem('key_khach_hang'), // Thay bằng token hợp lệ
          }
        })
        .then((res) => {
          console.log(res.data.data)
          this.user = res.data.data
          console.log(this.user)

        })
    }
  },
}
</script>
<style scoped></style>
