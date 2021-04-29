<div class="table-responsive">
    <table class="table" id="academics-table">
        <thead>
            <tr>
                <th>Academic Year</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($academics as $academic)
                <tr>
                    <td>{{ $academic->academic_year }}</td>
                    <td width="200">
                        {!! Form::open(['route' => ['academics.destroy', $academic->academic_id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="#" class='btn btn-default btn-xs' data-toggle="modal" data-target="#academic-view-modal"
                                data-academic_id="{{ $academic->academic_id }}"
                                data-academic_year="{{ $academic->academic_year }}"
                                data-created_at="{{ $academic->created_at }}"
                                data-updated_at="{{ $academic->updated_at }}" >
                                <i class="far fa-eye"> View</i>
                            </a>
                            <a href="{{ route('academics.edit', [$academic->academic_id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-edit"> Edit</i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"> Delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

