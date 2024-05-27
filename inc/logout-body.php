<style type="txt/css">
    body{
      background-color: #08AEEA;
  background-image: linear-gradient(0deg, #08AEEA 0%, #2AF598 100%);
  height: 1000px;
    }
    body{
            width: 100%;
            height: 100vh;
            background-color: #555;
            display: flex;
            justify-content: center;
            align-items: center;
            }
        .water{
            width:200px;
            height: 200px;
            background-color: yellow;
            border-radius: 50%;
            position: relative;
            box-shadow: inset 0 0 30px 0 rgba(0,0,0,.5), 0 4px 10px 0 rgba(0,0,0,.5);
            overflow: hidden;
        }
        .water:before, .water:after{
            content:'';
            position: absolute;
            width:400px;
            height: 400px;
            top:-150px;
            background-color: #fff;
        }
        .water:before{
            border-radius: 45%;
            background:rgba(255,255,255,.7);
            animation:wave 5s linear infinite;
        }
        .water:after{
            border-radius: 35%;
            background:rgba(255,255,255,.3);
            animation:wave 5s linear infinite;
        }
        @keyframes wave{
            0%{
                transform: rotate(0);
            }
            100%{
                transform: rotate(360deg);
            }
        }
    















  </style>

  <body>
    <! -- Admin pane HTML codes will be written here (Stars) -->
    <meta http-equiv="refresh" content="5;url=index.php?page=Login" />