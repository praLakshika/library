@extends('admin.layouts.admin')

@section('title', "Online book Management")

@section('content')
    <div class="row">
        <div id="myModal" class="modal fade in" style="display: block; margin-top: 160px; margin-left: 100px;">
                <div class="modal-dialog modal-confirm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="icon-box">
                                <i class="fa fa-trash"></i>
                            </div>				
                            <h4 class="modal-title">Success</h4>	
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <p>Success done your job online book Management</p>
                        </div>
                        <div class="modal-footer">
                        <a href="/admin/online_book" class="btn btn-primary">Ok</a>
                        </div>
                    </div>
                </div>
            </div>
        <div class="pull-right">
            {{-- {{ $users->links() }} --}}
        </div>
    </div>
@endsection