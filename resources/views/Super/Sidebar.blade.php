<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="/home">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
         <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('ApproveArt')}}">
          <span class="menu-icon">
            <i class="menu-icon mdi mdi-layers-outline"></i>
          </span>
          <span class="menu-title">Approve ArtPieces</span>
        </a>
      </li>
      {{-- <li class="nav-item nav-category">Add Art</li> --}}
    
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('orders')}}">
          <span class="menu-icon">
            <i class="menu-icon mdi mdi-layers-outline"></i>
          </span>
          <span class="menu-title">Orders</span>
        </a>
      </li>


      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('posts')}}">
          <span class="menu-icon">
            <i class="menu-icon mdi mdi-layers-outline"></i>
          </span>
          <span class="menu-title">Posted ArtPieces</span>
        </a>
      </li>
    </ul>
  </nav>