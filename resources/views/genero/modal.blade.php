<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <button class="close" type="button" data-miss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title" id="myModalLabel">Actualizar Genero</h4>            
    </div>
    <div class="modal-body">
        <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
        <input type="hidden" id="id"> 
        @include('genero.forms.genero')         
    </div>
    <div class="modal-footer">
        {!!link_to('#',$title='actualizar',$attributes=['id'=>'actualizar','class'=>'btn btn-primary'
    ],$secure=null)!!}
    </div>
    </div>
</div>
</div>