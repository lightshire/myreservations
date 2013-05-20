<nav id="primary" class="main-nav">
  <ul>

    <li class="active">
      <a href="{{URL::to('admin')}}">
        <i class="icon-dashboard"></i> Dashboard
      </a>
    </li>

    <li class="">
       <a href="{{URL::to('admin/clients')}}">
        <i class="icon-list-alt"></i> Clients
      </a>
    </li>

    <li class="">
       <a href="{{URL::to('admin/reservations')}}">
          <i class="icon-beaker"></i>Reservations
      </a>
    </li>

    <li class="">
       <a href="{{URL::to('admin/rooms')}}">
          <i class="icon-plus-sign"></i> Room List
      </a>
    </li>

    <li class="">
       <a href="{{URL::to('admin/invoices')}}">
          <i class="icon-bar-chart"></i> Online Invoices
      </a>
    </li>

  </ul>
</nav>