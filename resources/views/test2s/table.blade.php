<div class="table-responsive">
    <table class="table" id="test2s-table">
        <thead>
        <tr>
            
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($test2s as $test2)
            <tr>
                
                <td width="120">
                    {!! Form::open(['route' => ['test2s.destroy', $test2->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('test2s.show', [$test2->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('test2s.edit', [$test2->id]) }}"
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
