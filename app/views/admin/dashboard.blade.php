<div id="modal" class="black-box modal hide fade">
   {{ Form::open(array('route' => array('reservations.store'))) }}
  <div class="modal-header tab-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <span>New Reservation</span>
  </div>
  <div class="modal-body separator">
    {{Alert::info('New Reservation. This reservation is saved only on the webhost and is not released for the offline system.')->open()}}
   
    <div class="row-fluid">
      <div class="span6">
        <label>Days of Reservation</label>
          <input type="hidden" name="api-type" value="{{ApiTypes::$SHORT_CODE}}" />
          <input type="hidden" name="redirect-to" value="{{URL::current()}}" />
        <!-- <input id="datetimepicker" type="text" class="fill-up hasDatepicker" value="jQuery date time picker"> -->
          {{Form::token()}}
          {{Form::control_group(Form::label('from','From: '), Form::span12_text('from','',array('reservation-id'=>'from-picker','class'=>'fill-up')))}}
          {{Form::control_group(Form::label('to','To: '), Form::span12_text('to','',array('reservation-id'=>'to-picker','class'=>'fill-up')))}}
        
      </div>
      <div class="span6">
         <label>Client Info</label>
            {{Form::control_group(Form::label('client_first_name','First Name: '), Form::span12_text('client_first_name'))}}
            {{Form::control_group(Form::label('client_middle_name','Middle Name: '), Form::span12_text('client_middle_name'))}}
            {{Form::control_group(Form::label('client_last_name','Last Name: '), Form::span12_text('client_last_name'))}}
      </div>
    </div>
   
  </div>
  <div class="modal-footer">
    <div class="inner-well">
      <a class="button mini btn rounded light-gray" data-dismiss="modal">Close</a>
      <button class="button btn mini rounded blue" type="Submit">Save</button>
    </div>
  </div>
   {{Form::close()}}
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
            @if(Session::get('success'))
              {{Alert::info('Successfully saved a new Reservation!')->open()}}
            @endif
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

