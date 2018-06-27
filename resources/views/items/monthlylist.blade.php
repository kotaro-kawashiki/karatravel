    
<table  class="table table-striped">
        <tbody>
        @foreach($items as $row)
            <tr>
                 <td>{{ $row['genre'] }}</td>
                 <td>{{ $row['namae'] }}</td>
                 <td>{{ $row['kinngaku'] }}円</td>
            </tr>
    
        @endforeach
        </tbody>
</table>


</div>