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
    background-color: #dc3545;
    font-weight: 600;
    /* border-bottom: 3px dotted #cecece; */
    /* border-radius: 5px; */
    color: #000000;
    float: left;
    color: white;
    border-radius: 7px;
    letter-spacing: .9px;
">5. Discover Publishers (Industry)</h3>

@if(count($publishers))
<div class="ax-table-wrapper">
    <table class="ax-table ax-table--5col">
        <thead class="ax-bg--blue">
        <tr style="
    border-bottom: 1px dashed #dc3545;
    border-top: 5px solid #dc3545;
">

            <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
    width: 7%;
">Publisher
            </th>

            <th class="page-url" style="
    background-color: #ffffff;
    font-weight: bold;
    width: 22%;
">Latest Post
            </th>


            <th class="days total-backlinks ax-bg--purple" style="
    width: 13%;
    text-align: left;
    ">Last Backlink Date
            </th>
            <th class="days total-backlinks ax-bg--purple" style="
    width: 10%;
    ">Total Backlinks Given For Keyword
            </th>
            <th class="days total-backlinks ax-bg--purple" style="
    /* font-weight: bold; */
    color: #dc3545;
    width: 10%;
    ">Total Backlinks Given
            </th>


        </tr>
        </thead>

        <tbody>
        @foreach ($publishers as $publisher)
            <tr>
                <td class="page-url" data-th="Page URL">
                    <span class="bt-content">
                        {{$publisher->brand_name}}
                    </span>
                </td>
                <td class="page-url" data-th="Page URL">
                    <span class="bt-content">
                        {{$publisher->referring_page_title}}
                    </span>
                </td>
                <td class="days" data-th="Position Days" style="
        text-align: left;
    "><span class="bt-content" style="
        text-align: left;
        padding-left: 5px;
    ">{{ \Carbon\Carbon::parse($publisher->first_seen)->format('m-d-Y') }}</span></td>
                <td class="days" data-th="Position Days">
                    <span class="bt-content">
                        {{$publisher->backlinks_count}}
                    </span>
                </td>
                <td class="days" data-th="Position Days">
                    <span class="bt-content">
                        {{$publisher->total_backlinks_count}}
                    </span>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
    @else
    <p style="clear: both;">No high-quality publishers were found for this keyword.</p>
    @endif