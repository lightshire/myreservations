<nav id="secondary" class="main-nav">

  <div class="profile-menu">

    <div class="pull-left">
      <div class="avatar">
        <img src="{{URL::asset('images')}}/avatar.png" />
      </div>
    </div>

    <div class="pull-left">
      <div class="title">
        {{Auth::user()->username}}
      </div>
      <div class="btn-group">
       
        <button class="button mini inset black">Hotel Info</button>
        <button class="button mini inset black dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i></button>
        <ul class="dropdown-menu black-box-dropdown">
          <li><a href="#">User Settings</a></li>
          <li><a href="#">Subscription Settings</a></li>
          <li><a href="#">Hotel Settings</a></li>
          <li class="divider"></li>
          <li><a href="#">Logout</a></li>
        </ul>

      </div>
    </div>

    <div class="pull-right profile-menu-nav-collapse">
      <button class="button black"><i class="icon-reorder"></i></button>
    </div>

  </div>


</nav>