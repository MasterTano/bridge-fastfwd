<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header flex-col justify-content-between">
                <div>Matched Data</div>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Source A Id</th>
                        <th scope="col">Source B Id</th>
                        <th scope="col">Modified Source A</th>
                        <th scope="col">Modified Source B</th>
                        <th scope="col">Modified</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{$item->idSourceA}}</td>
                                <td>{{$item->idSourceB}}</td>
                                <td>{{$item->modifiedSourceA}}</td>
                                <td>{{ $item->modifiedSourceB->diffForHumans() }}</td>
                                <td>{{ $item->modified}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
