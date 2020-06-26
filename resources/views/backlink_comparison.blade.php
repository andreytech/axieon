<div class="ax-table-wrapper" style="
    margin-bottom: 75px;
">
    <table class="ax-table ax-table--5col">
        <thead class="ax-bg--blue">
        <tr style="
    border-bottom: 1px dashed #28a745;
    border-top: 5px solid #28a745;
">
            <th class="number" style="
    background-color: #ffffff;
    color: black;
    font-weight: bold;
">Rank
            </th>
            <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
">Page URL
            </th>
{{--
            <th class="days total-backlinks ax-bg--purple" style="">
                {{ \Carbon\Carbon::parse($serp->created_at)->format('m-d-Y') }}
                <span style="display:block">05-2-20</span>
            </th>
--}}
            <th class="days total-backlinks ax-bg--purple" style="color: #007bff;">
                Total
            </th>
            <th class="days total-backlinks ax-bg--purple" style="color: #dc3545;">
                Deviation
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($serp_results as $result)
            <tr>
                <td class="number" data-th="15">
                    <span class="bt-content">
                        {{$result->position}}
                        @if($result->page_id === $your_page_id)
                            <span>(You)</span>
                        @endif
                    </span>
                </td>
                <td class="page-url" data-th="Page URL" style="overflow: hidden;">
                    <span class="bt-content" style="overflow-wrap: anywhere;">
                        {{$result->url}}
                    </span>
                </td>
{{--
                <td class="days" data-th="Position Days">
                    <span class="bt-content">0</span>
                </td>
--}}

                <td class="days" >
                    <span class="bt-content"
                          @if($result->max_backlinks)
                          style="
    background-color: #28a745;
    color: white;
    border-radius: 5px;
    padding: 6px 8px 6px 8px;
"
                      @endif

                    >
                        {{$result->backlinks_count}}
                    </span>
                </td>
                <td class="deviation" data-th="Deviation from Position #1">
                    <span class="bt-content">{{$result->deviation}}</span>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>