<style>
    input:read-only {
        border: none;
        border-color: transparent;

    }

</style>

<div class="modal fade" id="academic-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel"><i class="far fa-id-badge" aria-hidden="true">
                        Academic Information</i></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                {{-- we using hidden to fetch data by id --}}
                <input type="hidden" name="academic_id" id="academic_id">

                {{-- Academic Id Field --}}
                <div class="form-group col-sm-6">
                    {!! Form::label('academic_id', 'Academic Id:') !!}
                    <input type="text" name="academic_id" id="academic_id" readonly>

                </div>

                {{-- Academic Year Field --}}
                <div class="form-group col-sm-6">
                    {!! Form::label('academic_year', 'Academic Year:') !!}
                    <input type="text" name="academic_year" id="academic_year" readonly>
                </div>

                {{-- Created At Field --}}
                <div class="form-group col-sm-6">
                    {!! Form::label('created_at', 'Created At:') !!}
                    <input type="text" name="created_at" id="created_at" readonly>
                </div>

                {{-- Updated At Field --}}
                <div class="form-group col-sm-6">
                    {!! Form::label('updated_at', 'Updated At:') !!}
                    <input type="text" name="updated_at" id="updated_at" readonly>
                </div>

            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $('#academic-view-modal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var academic_id = button.data('academic_id')
                var academic_year = button.data('academic_year')
                var created_at = button.data('created_at')
                var updated_at = button.data('updated_at')

                var modal = $(this)

                modal.find('modal-title').text('ACADEMIC INFORMATION');
                modal.find('.modal-body #academic_id').val(academic_id);
                modal.find('.modal-body #academic_year').val(academic_year);
                modal.find('.modal-body #created_at').val(created_at);
                modal.find('.modal-body #updated_at').val(updated_at);
   
        }); 
 </script>
@endpush