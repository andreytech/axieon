<h3 style="
    margin-top: 50px;
    margin-bottom: 25px;
    /* background-color: #e8e8e854; */
    padding: 20px;
    font-size: 1.3rem;
    font-weight: bold;
    /* border-bottom: 3px dotted #cecece; */
    /* border-radius: 5px; */
    color: #0c0c0c;
    margin-top: 10px;
    margin-bottom: 25px;
    /* background-color: #e8e8e854; */
    padding: 15px;
    font-size: 1.3rem;
    background-color: #dc2ad2;
    font-weight: 600;
    /* border-bottom: 3px dotted #cecece; */
    /* border-radius: 5px; */
    color: #000000;
    float: left;
    color: white;
    border-radius: 7px;
    letter-spacing: .9px;
">4. Compare Backlink Anchor Text Usage</h3>

<div class="ax-table-wrapper">
    <table class="ax-table ax-table--5col" style="
    margin-bottom: 75px;
">
        <thead class="ax-bg--blue">
        <tr style="
    border-bottom: 1px dashed #dc2ad2;
    border-top: 5px solid #dc2ad2;
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
    width: 36%;
">Page URL
            </th>

            <th class="days total-backlinks ax-bg--purple" style="width: 20%;">
                Total Anchors <span style="font-weight: 400; display: block;">(Containing Keyword)</span>
            </th>
            <th class="days total-backlinks ax-bg--purple" style="color: #dc2ad2;">
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
            <td class="page-url" data-th="Page URL">
                <span class="bt-content">
                    {{$result->url}}
                </span>
            </td>
            <td class="days" data-th="Position Days">
                <span class="bt-content"
                      @if($result->max_anchor_text_usage)
                      style="
    background-color: #dc2ad2;
    padding: 6px 7px 6px 7px;
    /* border: 1px solid #c0e6c0; */
    border-radius: 5px;
    color: white;
    border-radius: 100%;
"
                      @endif
                >
                    {{$result->anchor_text_usage}}
                </span>
            </td>
            <td class="days" data-th="+22">
                <span class="bt-content" style="">
                    {{$result->anchor_text_deviation}}
                </span>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>