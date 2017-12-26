<!DOCTYPE html>
<html>
<head>
<style>
    body {
        color: #435160;
        font-family: 'Open Sans', sans-serif;
    }
    form {
        text-align: center;
    }
    #input {
        width: 350px;
        padding: 15px 0px;
        background: transparent;
        border: 0;
        border-bottom: 1px solid #435160;
        border-radius: 4px;
        outline: none;
        color: #6D7781;
        font-size: 16px;

    }
    #input[type="submit"] {
        margin-top: 10px;
        background: #1FCE6D;
        border: 0;
        width: 350px;
        height: 40px;
        border-radius: 3px;
        color: #fff;
        font-size: 12px;
        cursor: pointer;
        transition: background .3s ease-in-out;
    }
    #input :hover {
        color: orange;
    }
    #h1 {
        color: #6D7781;
        font-family: 'Sofia', cursive;
        font-size: 15px;
        font-weight: bold;
        font-size: 2em;
        text-align: center;
        margin-bottom: 20px;
    }

</style>
</head>
<body>

    <form action="<?php echo base_url()."$module/Homepage/Customer"?>" method="post">
      <h1 id="h1">Thông Tin Khách hàng</h1>
      <input id="input" placeholder="Họ và Tên" type="text" name="yourname" ><br>
      <input id="input" placeholder="Số Điện Thoại" type="text" name="phone"><br>
      <input id="input" placeholder="Địa chỉ" type="text" name="address"><br>
      <input id="input" type="submit" name="submit" value="Lưu Thông Tin">
    </form>
</body>
</html>
