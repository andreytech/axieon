<div class="ax-table-wrapper">
    <table class="ax-table ax-table--5col">
        <thead class="ax-bg--blue">
        <tr style="
    border-bottom: 1px dashed #35ccfb;
    border-top: 5px solid #35ccfb;
">
            <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
    width: 40%;
">Publisher
            </th>
            <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
    width: 100%;
    padding-right: 5px;
">Backlink URL
            </th>

            <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
    width: 30%;
    padding-left: 5px;
    padding-right: 5px;
">Date
            </th>
            <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
    width: 100%;
">Page Title
            </th>
            <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
    width: 40%;
">Anchor Text
            </th>
            <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
    width: 20%;
    padding-left: 5px;
    padding-right: 5px;
">Dofollow
            </th>
            <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
    width: 50%;
">Backlink Type
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($backlinks as $backlink)
            <tr>
                <td class="page-url" data-th="Page URL" style="
    /* width: 40%; */
"><span class="bt-content"><a href="#">{{$backlink->brand_name}}</a></span></td>
                <td class="page-url" data-th="Page URL" style="
    padding-right: 5px;
"><span class="bt-content"><a href="#">{{$backlink->url}}</a></span></td>
                <td class="page-url" data-th="Page URL" style="
    padding-left: 5px;
    padding-right: 5px;
"><span class="bt-content">
">{{ \Carbon\Carbon::parse($serp->first_seen)->format('m-d-Y') }}</span></td>

                <td class="page-url" data-th="Page URL">
                    <span class="bt-content">
                        {{$backlink->referring_page_title}}
                    </span>
                </td>
                <td class="page-url" data-th="Page URL">
                    <span class="bt-content">
                        {{$backlink->link_anchor}}
                    </span>
                </td>
                <td class="page-url" data-th="Page URL" style="
    padding-left: 5px;
    padding-right: 5px;
"><span class="bt-content">
                        @if($backlink->is_dofollow)
                            Yes
                        @else
                            No
                        @endif
                    </span></td>
                <td class="page-url" data-th="Page URL">
                    <span class="bt-content">
                        {{$backlink->type}}
                    </span>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>