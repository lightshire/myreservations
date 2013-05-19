<!DOCTYPE html>
<html>

<!-- Mirrored from beer2code.com/themes/plastique/pages/dashboard/stats.html by HTTrack Website Copier/3.x [XR&CO'2010], Sun, 19 May 2013 18:52:06 GMT -->
<head>
  <meta charset="utf-8">
  <!-- Always force latest IE rendering engine or request Chrome Frame -->
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <title>Dashboard</title>
  @include('admin.nav.header')
 

  <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
</head>
<body>

<div id="modal" class="black-box modal hide fade">
  <div class="modal-header tab-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <span>Some modal title</span>
  </div>
  <div class="modal-body separator">
    <h4>Text in a modal</h4>
    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>
  </div>
  <div class="modal-footer">
    <div class="inner-well">
      <a class="button mini rounded light-gray" data-dismiss="modal">Close</a>
      <a class="button mini rounded blue">Save changes</a>
    </div>
  </div>
</div>

<div id="modal-gallery" class="black-box modal modal-gallery hide fade">
  <div class="modal-header tab-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <span class="modal-title"></span>
  </div>
  <div class="modal-body"><div class="modal-image"></div></div>
  <div class="modal-footer">
    <div class="pull-left">
      You can also change the images<br/> by scrolling the mouse wheel!
    </div>
    <div class="pull-right">
      <a class="button blue modal-next">Next <i class="icon-arrow-right icon-white"></i></a>
      <a class="button gray modal-prev"><i class="icon-arrow-left icon-white"></i> Previous</a>
      <a class="button green modal-play modal-slideshow" data-slideshow="5000"><i class="icon-play icon-white"></i> Slideshow</a>
      <a class="button black" target="_blank"><i class="icon-download"></i> Download</a>
    </div>
  </div>
</div>
@include('admin.nav.primary')
@include('admin.nav.secondary')




<section id="main">
  <div class="top-nav">
    <div class="container-fluid">
      <div class="row-fluid search-button-bar-container">
        <div class="span12">
          <ul class="breadcrumb">
            <li class="active"><a href="{{URL::to('admin')}}"><i class="icon-home"></i> Dashboard</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row-fluid">
  <div class="span6">
    <div class="row-fluid">
      <div class="span12">
        <div style="margin-bottom: 20px;">

  <div class="big-button-bar">
    <a class="button large" href="#">
      <i class="icon-bookmark"></i>
      <span>Bookmarks</span>
    </a>

    <a class="button large" href="#">
      <i class="icon-signal"></i>
      <span>Reports</span>
    </a>

    <a class="button large" href="#">
      <i class="icon-comments"></i>
      <span>Comments</span>
    </a>

    <a class="button large" href="#">
      <i class="icon-user"></i>
      <span>Users</span>
    </a>

    <a class="button large" href="#">
      <i class="icon-picture"></i>
      <span>Photos</span>
    </a>

    <a class="button large" href="#">
      <i class="icon-tags"></i>
      <span>Tags</span>
    </a>
  </div>

</div>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="box">
          <div class="tab-header">
            System status
          </div>
          <div class="padded">
            <div id="chart1" style="width: 100%; height: 250px;"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span12">
        <table class="table table-striped table-bordered box">
  <thead>
  <tr>
    <th colspan="2">Table title</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>Webhosting:</td>
    <td><strong>VPS Server 1</strong></td>
  </tr>
  <tr>
    <td>Available space:</td>
    <td>239/1000 GB used</td>
  </tr>
  <tr>
    <td>MySQL databases:</td>
    <td class="red">5/5 used</td>
  </tr>
  <tr>
    <td>Email accounts:</td>
    <td class="red">25/25 used</td>
  </tr>
  <tr>
    <td>Ruby version:</td>
    <td>1.9.3</td>
  </tr>
  <tr>
    <td>Rails version:</td>
    <td>3.0.1</td>
  </tr>
  </tbody>
  <tfoot>
  <tr>
    <td colspan="2">
      <div class="clearfix" style="padding: 0 5px;">
        <div class="pull-left">
          <a href="#" class="button blue">Buy now!</a>
          <a href="#" class="button">Cancel subscription</a>
        </div>
      </div>
    </td>
  </tr>
  </tfoot>
</table>

      </div>
    </div>

  </div>

  <div class="span6">
    <div class="row-fluid">
      <div class="span12">
        <div class="tabbable black-box" style="margin-bottom: 18px;">

  <div class="tab-header">
    Server status
        <span class="pull-right">
          <span class="options">
            <div class="btn-group">
              <a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i></a>
              <ul class="dropdown-menu black-box-dropdown dropdown-left">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div>
          </span>
        </span>
  </div>

  <ul class="nav nav-tabs">
    <li class=""><a href="#tab1" data-toggle="tab"><i class="icon-globe"></i> System</a></li>
    <li class="active"><a href="#tab2" data-toggle="tab"><i class="icon-hdd"></i> Server</a></li>
  </ul>
  <div class="tab-content">

    <div class="tab-pane" id="tab1">
      <div class="separator">
        <div class="inner-well clearfix">
  <div class="pull-left">
    Antivirus status
  </div>

  <div class="pull-right">
    <input rel="confirm-check" type="checkbox" id="VKZp4" class="checky" checked="checked"/>
    <label for="VKZp4" class="checky"><span></span></label>
  </div>
</div>

<div class="inner-well clearfix">
  <div class="pull-left">
    Proxy server status
  </div>

  <div class="pull-right">
    <input rel="confirm-check" type="checkbox" id="FNNqp" class="checky" />
    <label for="FNNqp" class="checky"><span></span></label>
  </div>
</div>
      </div>
      <div class="separator">
        <div class="inner-well">
          <div id="stats1" style="width: 100%; height: 100px;"></div>
        </div>
      </div>
      <div class="padded">
        <div id="fix-stats">
  <p>
    <a rel="action" class='button mini rounded inset light-gray'>Delete stats</a>
  </p>

  <div style="display: none;" rel="confirm-action">

    <div class="inner-well clearfix">
      <b>Are you sure?</b>
      <div class="pull-right">
        <input rel="confirm-check" type="checkbox" id="NxwYk" class="checky"/>
        <label for="NxwYk" class="checky green"><span></span></label>
      </div>
    </div>

    <div class="clearfix vpadded">
      <div class="pull-left">
        <a href="#" class="button red" rel="confirm-do">Delete</a>
      </div>
      <div class="pull-right">
        <a href="#" class="button gray" rel="confirm-cancel">Cancel</a>
      </div>
    </div>

  </div>

</div>
      </div>
    </div>

    <div class="tab-pane active" id="tab2">
      <div class="separator">
        <div class="inner-well">
          <div id="stats2" style="width: 100%; height: 100px;"></div>
        </div>
      </div>
      <div class="separator">
        <div class="inner-well clearfix">
  <div class="pull-left">
    Antivirus status
  </div>

  <div class="pull-right">
    <input rel="confirm-check" type="checkbox" id="GhVm3" class="checky" checked="checked"/>
    <label for="GhVm3" class="checky"><span></span></label>
  </div>
</div>

<div class="inner-well clearfix">
  <div class="pull-left">
    Proxy server status
  </div>

  <div class="pull-right">
    <input rel="confirm-check" type="checkbox" id="mxaz8" class="checky" />
    <label for="mxaz8" class="checky"><span></span></label>
  </div>
</div>
      </div>
      <div class="padded">
        <div id="fix-stats2">
  <p>
    <a rel="action" class='button mini rounded inset light-gray'>Delete stats</a>
  </p>

  <div style="display: none;" rel="confirm-action">

    <div class="inner-well clearfix">
      <b>Are you sure?</b>
      <div class="pull-right">
        <input rel="confirm-check" type="checkbox" id="gtnDu" class="checky"/>
        <label for="gtnDu" class="checky green"><span></span></label>
      </div>
    </div>

    <div class="clearfix vpadded">
      <div class="pull-left">
        <a href="#" class="button red" rel="confirm-do">Delete</a>
      </div>
      <div class="pull-right">
        <a href="#" class="button gray" rel="confirm-cancel">Cancel</a>
      </div>
    </div>

  </div>

</div>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="black-box tex">
  <div class="tab-header">
    Recent comments
  </div>
  <ul class="recent-comments">

    

        <li class="separator">
          <div class="avatar pull-left">
            <img src="../../images/avatar.png" />
          </div>

          <div class="article-post">
            <div class="user-info"> Posted by jordan, 3 days ago </div>
            <div class="user-content">
              Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...
              Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...
              Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...
            </div>

            <div class="btn-group">
              <button class="button black mini"><i class="icon-pencil"></i> Edit</button>
              <button class="button black mini"><i class="icon-remove"></i> Delete</button>
              <button class="button black mini"><i class="icon-ok"></i> Approve</button>
            </div>
          </div>
        </li>

    

        <li class="separator">
          <div class="avatar pull-left">
            <img src="../../images/avatar.png" />
          </div>

          <div class="article-post">
            <div class="user-info"> Posted by jordan, 3 days ago </div>
            <div class="user-content">
              Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...
              Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...
              Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...
            </div>

            <div class="btn-group">
              <button class="button black mini"><i class="icon-pencil"></i> Edit</button>
              <button class="button black mini"><i class="icon-remove"></i> Delete</button>
              <button class="button black mini"><i class="icon-ok"></i> Approve</button>
            </div>
          </div>
        </li>

    
    <li class="separator" style="text-align: center">
      <a href="#">View all</a>
    </li>
  </ul>
</div>
      </div>
    </div>

  </div>
</div>



 @include('admin.footer')