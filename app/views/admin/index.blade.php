<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!-- Always force latest IE rendering engine or request Chrome Frame -->
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <title>Dashboard</title>
  @include('admin.nav.header')
 

  <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
</head>
<body>


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
 @if(isset($current))
  @include($current)
@else
  @include('admin.dashboard')
@endif



 @include('admin.footer')