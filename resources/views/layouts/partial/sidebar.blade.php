<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('backend/img/sidebar-2.jpg') }}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="{{ route('admin.dashboard') }}" class="simple-text logo-normal">
          DIU Smart Canteen
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ Request::is('admin/dashboard*') ? 'active': ''}}">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{ Request::is('admin/slider*')? 'active': ''}}">
            <a class="nav-link" href="{{ route('slider.index') }}">
              <i class="material-icons">slideshow</i>
              <p>Sliders</p>
            </a>
          </li>
          <li class="{{ Request::is('admin/category*')? 'active': ''}}">
            <a class="nav-link" href="{{ route('category.index') }}">
              <i class="material-icons">content_paste</i>
              <p>Categories</p>
            </a>
          </li>
          <li class="{{ Request::is('admin/item*')? 'active': ''}}">
            <a class="nav-link" href="{{ route('item.index') }}">
              <i class="material-icons">library_books</i>
              <p>Items</p>
            </a>
          </li>
          <li class="{{ Request::is('admin/cart*')? 'active': ''}}">
            <a class="nav-link" href="{{ route('cart.index') }}">
              <i class="material-icons">shopping_cart</i>
              <p>Carts</p>
            </a>
          </li>
        </ul>
      </div>
    </div>