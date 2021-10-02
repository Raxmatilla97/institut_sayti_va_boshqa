<div class="table-responsive">
    <table class="table" id="profs-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Title</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($profs as $prof)
            <tr>
                <td>{{ $prof->name }}</td>
            <td>{{ $prof->title }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['prof.profs.destroy', $prof->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('prof.profs.show', [$prof->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('prof.profs.edit', [$prof->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
