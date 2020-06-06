<div class="row justify-content-center mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header flex-col justify-content-between">
                <div>UnMatched Data With Duplicates</div>
{{--                <div>--}}
{{--                    <button class="btn btn-primary">UnMatched Data</button>--}}
{{--                </div>--}}
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Source A ID</th>
{{--                        <th scope="col">modifiedSourceA</th>--}}
{{--                        <th scope="col">modifiedSourceB</th>--}}
                        <th scope="col">Source B Data</th>
                        <th scope="col">Select Match from Source B</th>
                        <th scope="col">Action</th>
                        <th scope="col">Save</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Customer A</th>
                        <td>frgrdgsdgfsd</td>
                        <td>dfasda sda</td>
                        <td>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </td>
                        <td>
                            <span>
                                <input id="ignore" type="checkbox">
                                <label for="ignore">Ignore</label>
                            </span>
                                        <span>
                                <input class="" id="delete" type="checkbox">
                                <label for="delete">Delete from Source</label>
                            </span>

                        </td>
                        <td>
                            <span>
                                <button type="button" class="btn btn-primary">Save</button>
                            </span>
                        </td>

                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
