<nav class="navbar navbar-expand-lg px-5" style="height:56px ; z-index:99;background-color: rgb(191, 73, 38);position: sticky;width: 100%; transition: top 0.3s;" id="navbar">
    <div class="container-fluid" style="height: 40px">
      <a class="navbar-brand" style="color:rgb(255, 201, 163); font-weight:bold" href="/">PANTHEGIFT</a>
      <button style="z-index: 99" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="height: 40px">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/about">About</a>
          </li>
          <li class="nav-item dropdown text-light">
            <a class="nav-link dropdown-toggle text-light" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Product
            </a>
            <ul class="dropdown-menu" style="background:rgb(191, 73, 38); color: rgb(255, 201, 163);">
              <li><a class="dropdown-item text-light" onmouseover="this.style.backgroundColor='rgba(0,0,0,0.1)'" onmouseout="this.style.backgroundColor='rgb(191,73,38)'" href="/products">All Products</a></li>
              <li><a class="dropdown-item text-light" onmouseover="this.style.backgroundColor='rgba(0,0,0,0.1)'" onmouseout="this.style.backgroundColor='rgb(191,73,38)'"href="/products?category=bucket">Bucket</a></li>
              <li><a class="dropdown-item text-light" onmouseover="this.style.backgroundColor='rgba(0,0,0,0.1)'" onmouseout="this.style.backgroundColor='rgb(191,73,38)'"href="/products?category=baloon">Baloon</a></li>
              <li><a class="dropdown-item text-light" onmouseover="this.style.backgroundColor='rgba(0,0,0,0.1)'" onmouseout="this.style.backgroundColor='rgb(191,73,38)'"href="/products?category=trophy">Trophy</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex align-content-center flex-wrap" action="/products">
        <div class="d-flex">
          <div class="input-group">
            <input type="text" name="search" value="{{ request('search') }}" class="form-control" aria-label="Text input with segmented dropdown button">
            <div class="input-group-append">
              <select name="category" class="custom-select input-group-append" style="height: 100%">
                <option value="" {{ request('category') === '' ? 'selected' : null}}>All Categories</option>
                <option value="baloon" {{ request('category') === 'baloon' ? 'selected' : null}}>Baloon</option>
                <option value="bucket" {{ request('category') === 'bucket' ? 'selected' : null}}>Bucket</option>
                <option value="trophy" {{ request('category') === 'trophy' ? 'selected' : null}}>Trophy</option>
              </select>
            </div>
          </div>
          <button class="btn" style="margin-left:5px; font-weight:600; color:rgb(191, 73, 38); background: rgb(255, 201, 163); border: 1px solid rgb(255, 201, 163)" type="submit">Search</button>
        </div>
        </form>          
          @auth
            <div class="d-flex">
              <div class="dropdown dropdown-menu-end">
                <a class="nav-link dropdown-toggle text-light" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img height="32" width="32" src="https://img.icons8.com/dusk/64/test-account.png" alt="test-account"/>
                </a>       
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink" style="background-color: rgb(191, 73, 38)">
                  <li><a class="dropdown-item text-light" onmouseover="this.style.backgroundColor='rgba(0,0,0,0.1)'" onmouseout="this.style.backgroundColor='rgb(191,73,38)'"href="/dashboard">Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item text-light" onmouseover="this.style.backgroundColor='rgba(0,0,0,0.1)'" onmouseout="this.style.backgroundColor='rgb(191,73,38)'">Logout</button>
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          @else
          <div class="d-flex align-center">
            <a class="dropdown-item text-light" style="display: flex; align-items:center" onmouseover="this.style.backgroundColor='rgb(191,73,38)'" onmouseout="this.style.backgroundColor='rgb(191,73,38)'" href="/login">LOGIN</a>
          </div>
          @endauth
      </div>
    </div>
  </nav>

  <script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
        document.getElementById("navbar").style.top = "0";
    }
    }
  </script>
