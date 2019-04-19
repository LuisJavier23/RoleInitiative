  <!-- Navigation -->
  
  <script>
        $('.search-input').focus(function(){
              $(this).parent().addClass('focus');
            }).blur(function(){
              $(this).parent().removeClass('focus');
            })
            </script>
    <style>
                  *,
                  *::before,
                  *::after {
                    box-sizing: border-box;
                  }
                  
                  $color: #e24040;
                  
                  body {
                    height: 100vh;
                    margin: 0;  
                    background: #DEDEDE;
                    color: #5a6674;
                    font-size: 13px;
                    font-family: 'Roboto', sans-serif;
                    overflow: hidden;
                  }
                  
                  
                  /*--------------------
                  App
                  --------------------*/
                  .search-form {
                    position: relative;
                    top: 50%;
                    left: 50%;
                    width: 350px;
                    height: 40px;
                    border-radius: 40px;
                    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
                    transform: translate(-50%, -50%);
                    background: #fff;
                    transition: all 0.3s ease;
                  
                    &.focus {
                      box-shadow: 0 3px 4px rgba(0, 0, 0, 0.15);
                    }
                  }
                  
                  .search-input {
                    position: absolute;
                    top: 10px;
                    left: 38px;
                    font-size: 14px;
                    background: none;
                    color: #5a6674;
                    width: 195px;
                    height: 20px;
                    border: none;
                    appearance: none;
                    outline: none;
                  
                    &::-webkit-search-cancel-button {
                      appearance: none;
                    }
                  }
                  
                  .search-button {
                    position: absolute;
                    top: 10px;
                    left: 15px;
                    height: 20px;
                    width: 20px;
                    padding: 0;
                    margin: 0;
                    border: none;
                    background: none;
                    outline: none!important;
                    cursor: pointer;
                    
                    & svg {
                      width: 20px;
                      height: 20px;
                      fill: #5a6674;
                    }
                  }
                  
                  .search-option {
                    position: absolute;
                    text-align: right;
                    top: 10px;
                    right: 15px;
                  
                    div {
                      position: relative;
                      display: inline-block;
                      margin: 0 1px;
                      cursor: pointer;
                      
                      input {
                        position: absolute;
                        top: 0;
                        left: 0;
                        opacity: 0.01;
                        cursor: pointer;
                      }
                      
                      span {
                        position: absolute;
                        display: block;
                        text-align: center;
                        left: 50%;
                        transform: translateX(-50%);
                        opacity: 0;
                        background: #929AA3;
                        color: #fff;
                        font-size: 9px;
                        letter-spacing: 1px;
                        line-height: 1;
                        text-transform: uppercase;
                        padding: 4px 7px;
                        border-radius: 12px;
                        top: -18px;
                        transition: all .2s ease-in-out;
                        
                        &::after {
                          content: '';
                          position: absolute;
                          bottom: -3px;
                          left: 50%;
                          transform: translateX(-50%);
                          border-top: 4px solid #929AA3;
                          border-left: 4px solid transparent;
                          border-right: 4px solid transparent;
                          transition: all .2s ease-in-out;
                        }
                      }
                      
                      &:hover span {
                        opacity: 1;
                        top: -21px;
                      }
                      
                      label {
                        display: block;
                        cursor: pointer;
                      }
                      
                      svg {
                        height: 20px;
                        width: 20px;
                        fill: #5a6674;
                        opacity: 0.6;
                        transition: all .2s ease-in-out;
                        pointer-events: none;
                      }
                      
                      &:hover svg {
                        opacity: 1;
                      }
                      
                      input:checked + label svg {
                        fill: $color;
                        opacity: .9;
                      }
                      
                      input:checked + label span {
                        background: $color;
                        
                        &::after {
                          border-top-color: $color;
                        }
                      }
                    }
                  
                    a.nav-link, a.nav-link:hover, a.nav-link:focus {

                  }
                  </style>
  
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #343a40e8!important;">
    <div class="container">
      <a class="navbar-brand DragonText" href="#" style="font-size: 30px;vertical-align: middle;margin-top: -5px;margin-bottom: -10px;">Initiative</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="#">Done</a>
              </li>
          
        </ul>
      </div>
    </div>
  </nav>