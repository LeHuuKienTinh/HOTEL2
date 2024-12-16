<template>
    <div class="top" style="background-color: black; height: 80px;">
        <div class="container" style="background-color: black; height: 100%; display: flex;  align-items: center; box-sizing: border-box;">
            <img width="190" src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/75/2024/03/23022929/NSC-Logo-1-Line-Blue.png" alt="Novotel Saigon Centre" style="font-family: Arial, sans-serif !important; margin-top: 0;display:inline-block;">
            <h2 style="width: 100%;;color: blue; width: 662px; display: inline-block; justify-content: center; align-items: center; text-align: center; margin: 0 20px;">NOVOTEL SAIGON CENTRE</h2>
            <router-link to="/khach-hang/dang-nhap" ><button class="btn" style="background-color: blue; color: white;">Đăng nhập</button></router-link>
            <router-link to="/khach-hang/dang-ky"><button class="btn" style="margin-left: 10px; background-color: gray;color: white;">Đăng ký</button></router-link>
            <button class="btn color-change-text" style="margin-left: 10px; background-color: red;color: white; padding: 13px;">ĐẶT PHÒNG NGAY!</button>
        </div>
    </div>
</template>
<script>
export default {

}
</script>
<style scoped>
  .color-change-text {
        font-weight: bold;
        animation: colorChange 3s infinite; /* Thực hiện animation liên tục */
    }

    @keyframes colorChange {
        0% {
            color: rgb(33, 14, 205);
        }
        50% {
            color: green;
        }
        100% {
            color: yellow;
        }
    }</style>
