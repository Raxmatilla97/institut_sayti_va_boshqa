<div class="table-responsive">
    <table class="table" id="elonlars-table">
        <thead>
        <tr>
            <th>Title</th>
        <th>Slug</th>
        <th>Img</th>
        <th>Desc</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($elonlars as $elonlar)
            <tr>
                <td>{{ $elonlar->title }}</td>
            <td>{{ $elonlar->slug }}</td>
            <td>{{ $elonlar->img }}</td>
            <td>{{ $elonlar->desc }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['elonlars.destroy', $elonlar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('elonlars.show', [$elonlar->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('elonlars.edit', [$elonlar->id]) }}"
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
