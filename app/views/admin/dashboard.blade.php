<div id="modal" class="black-box modal hide fade">
  <div class="modal-header tab-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <span>New Reservation</span>
  </div>
  <div class="modal-body separator">
    {{Alert::info('New Reservation. This reservation is saved only on the webhost and is not released for the offline system.')->open()}}
     {{Form::open()}}
    <div class="row-fluid">
      <div class="span6">
        <label>Days of Reservation</label>
       
          {{Form::token()}}
          {{Form::control_group(Form::label('from','From: '), Form::span12_text('from'))}}
          {{Form::control_group(Form::label('to','To: '), Form::span12_text('to'))}}
        
      </div>
      <div class="span6">
         <label>Client Info</label>
            {{Form::control_group(Form::label('first_name','First Name: '), Form::span12_text('first_name'))}}
            {{Form::control_group(Form::label('middle_name','Middle Name: '), Form::span12_text('middle_name'))}}
            {{Form::control_group(Form::label('last_name','Last Name: '), Form::span12_text('last_name'))}}
      </div>
    </div>
    {{Form::close()}}
  </div>
  <div class="modal-footer">
    <div class="inner-well">
      <a class="button mini rounded light-gray" data-dismiss="modal">Close</a>
      <a class="button mini rounded blue">Save</a>
    </div>
  </div>
</div>

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
  <div style="padding:10px;">
    <div class="row-fluid">
      <div class="span6">
        <div class="black-box tex">
          <div class="tab-header clearfix">
            <i class='icon-tasks icon-white'></i>&nbsp;Latest Reservations
            <div class="btn-group pull-right"  style="margin:-1px; margin-right:4px;">
              <button class="inset black button mini"><i class="icon-white icon-refresh"></i></button>
              <button class="inset black button mini"><i class="icon-white icon-cog"></i></button>
              <button class="inset black button mini"><a href="#modal" role="button" data-toggle="modal"><i class="icon-white icon-edit"></i></a></btn>
            </div>
          </div>
          <div style="padding:10px;" class="clearfix">
            <table class='table table-condensed'>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>FROM</th>
                  <th>TO</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <tr class="">
                  <td>1</td>
                  <td>10:00</td>
                  <td>20.00</td>
                  <td>30.00</td>
                </tr>
              </tbody>
            </table>

            <a class="btn btn-inverse pull-right" href="{{URL::to('admin/reservations')}}">More..</a>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="black-box tex">
          <div class="tab-header">
            <i class='icon-list icon-white'></i>&nbsp;Latest Cancellations
          </div>
          <div style="padding:10px;">
          </div>
        </div>
      </div>
    </div>
  </div>

  