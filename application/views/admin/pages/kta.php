<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: "Times New Roman", Times, serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: linear-gradient(#d5687e, #c43552 45%, #fff 45%, #fff 100%);
      }

      .card {
        position: relative;
        width: 300px;
        height: 400px;
        background: #fff;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.1);
        border-top: 1px solid rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(15px);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
      }

      .img-bx {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 10px;
        overflow: hidden;
        transform: translateY(30px) scale(0.5);
        transform-origin: top;
      }

      .img-bx img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .content {
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: flex-end;
        padding-bottom: 30px;
      }

      .content .detail {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
      }

      .content .detail h2 {
        color: #444;
        font-size: 1.6em;
        font-weight: bolder;
      }

      .content .detail h2 span {
        font-size: 0.7em;
        color: #d5687e;
        font-weight: bold;
      }

      .sci {
        position: relative;
        display: flex;
        margin-top: 5px;
      }

      .sci li {
        list-style: none;
        margin: 4px;
      }

      .sci li a {
        width: 45px;
        height: 45px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        background: transparent;
        font-size: 1.5em;
        color: #444;
        text-decoration: none;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        transition: 0.5s;
      }

      .sci li a:hover {
        background: #03a9f4;
        color: #fff;
      }
    </style>
    <div class="card" id="kta">
      <div class="img-bx">
        <img src="$nama->image" alt="img" />
      </div>
      <div class="content">
        <div class="detail">
          <h2>$nama->nama<br /><span>$nama->nama_divisi</span></h2>
          <p class="sci">$nama->deskripsi</p>
        </div>
      </div>
    </div>
    <script src="<?= base_url('assets') ?>/js/html2canvas.js"></script>
</body>
</html>