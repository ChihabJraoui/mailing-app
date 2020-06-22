
<form role="form" action="" method="post" name="fToutCarnet">

    <table class="table table-middle">
        <tr>
            <th data-sorter="false" data-filter="false" width="30px">
                <input type="checkbox" class="checkAll" id="AllCarnet" />
            </th>
            <th>
                Tous
            </th>
            <th>
                <button id="btn-delete-books" class="btn btn-default pull-right disabled" type="button">
                    <i class="material-icons">delete</i>
                    <span>Supprimer</span>
                </button>
            </th>
        </tr>

        @if($books->count() > 0)

        @foreach($books as $book)

        <tr id="book-" align="center">
            <td>
                <input type="checkbox" name="idCarnets[]" value="'.$r["idCarnet"].'" />
            </td>
            <td>{{ $book->title }}</td>
            <td class="text-right">
                <a href="#">
                    <i class="material-icons">more_vert</i>
                </a>
            </td>
        </tr>

        @endforeach

        @endif


    </table>

</form>