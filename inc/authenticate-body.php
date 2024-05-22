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
    <div class="container-fluid">
      <div class="row" style="padding-top: 10%;">
      <div class="col-md4"></div>
      <div class="col-md4" style="text-align: center; background-color: white; border-radius: 20px; padding: 30px;">
        
        <div class="water" style="padding-left: 70;">
        <span style="font-weight: 100; padding-bottom: 20%;">Authenticating Your Account...</span>
        </div>
          
          
          <div class="col-md12">
            <form>
              <div class="row">
                
              </div>
            </form>
          </div>
          <div class="col-md12" style="text-align: center; font-size: 14px; font-weight: 200; padding: 10px 20px 10px 20px">
            <a href="authenticate.html" class="btn btn-warning">Submit now</a>

          </div>

          
      </div>
      <div class="col-md4"></div>
      </div>
    </div>


    <! -- Admin pane HTML codes will be written here (End) -->

    <meta http-equiv="refresh" content="2;url=index.php?page=Dashboard" />