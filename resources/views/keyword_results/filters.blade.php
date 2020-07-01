<h3 style="
    margin-top: 10px;
    margin-bottom: 25px;
    /* background-color: #e8e8e854; */
    padding: 15px;
    font-size: 1.3rem;
    background-color: #3923b3;
    font-weight: 600;
    /* border-bottom: 3px dotted #cecece; */
    /* border-radius: 5px; */
    color: #000000;
    float: left;
    color: white;
    border-radius: 7px;
    letter-spacing: .9px;
    ">1. Select Your Backlink Filters</h3>
<div class="ax-chart" ax-data-color="blue"  id="results_filters" style="
    -webkit-box-shadow: 0 6px 40px 0 rgba(0,0,0,0.1);
    box-shadow: 0 6px 40px 0 rgba(0,0,0,0.1);
    border-top: 5px #3923b3 solid;
    border-radius: 5px;
    overflow: visible;
    float: left;
">
    <div class="ax-chart__body" style="position: relative;">
        {{--
        <p style="
            font-weight: 600;
            padding-left: 20px;
            color: #212529;
        ">1. Select the date range and intervals (X-Value):</p>


        <div class="ax-form-wrapper" style="float: left;margin: 0;">
            <div class="ax-form-field ax-fourth">
                <fieldset>
                    <select class="ax-select ax-select--medium" style="display: none;">
                        <option value="0">Date Range</option>
                    </select>
                </fieldset>
            </div>

            <div class="ax-form-field ax-fourth" style="">
                <fieldset>
                    <select class="ax-select ax-select--medium" name="range_intervals"
                            style="display: none;">
                        @foreach($filter_values['range_intervals'] as $key => $value)
                            <option value="{{$key}}"
                                @if($search_params['range_intervals'] == $key)
                                    selected
                                @endif
                            >{{$value}}</option>
                        @endforeach
                    </select>
                </fieldset>
            </div>
        </div>
        --}}

        <p style="
    font-weight: 600;
    padding-left: 20px;
    color: #212529;
">1. Select the backlink structure (Y-Value): </p>
        <div class="ax-form-wrapper">
            <div class="ax-form-field ax-fourth">
                <fieldset>
                    <select class="ax-select ax-select--medium" name="unique_scope"
                            style="display: none;">
                        @foreach($filter_values['unique_scope'] as $key => $value)
                            <option value="{{$key}}"
                                    @if($search_params['unique_scope'] == $key)
                                    selected
                                    @endif
                            >{{$value}}</option>
                        @endforeach
                    </select>
                </fieldset>
            </div>
            <div class="ax-form-field ax-fourth">
                <fieldset>
                    <select class="ax-select ax-select--medium" name="publisher_type"
                            style="display: none;">
                        @foreach($filter_values['publisher_type'] as $key => $value)
                            <option value="{{$key}}"
                                    @if($search_params['publisher_type'] == $key)
                                    selected
                                    @endif
                            >{{$value}}</option>
                        @endforeach
                    </select>
                </fieldset>
            </div>

            <div class="ax-form-field ax-fourth">
                <fieldset>
                    <select class="ax-select ax-select--medium" name="anchor_type"
                            style="display: none;">
                        @foreach($filter_values['anchor_type'] as $key => $value)
                            <option value="{{$key}}"
                                    @if($search_params['anchor_type'] == $key)
                                    selected
                                    @endif
                            >{{$value}}</option>
                        @endforeach
                    </select>
                </fieldset>
            </div>
        </div>

        <p style="
    font-weight: 600;
    padding-left: 20px;
    color: #212529;
">2. Select the scope of data for the value count.</p>

        <div class="ax-form-wrapper">
            <div class="ax-form-field ax-fourth">
                <fieldset style="
    margin: 0;
">
                    <select class="ax-select ax-select--medium" name="level_scope"
                            style="display: none;">
                        @foreach($filter_values['level_scope'] as $key => $value)
                            <option value="{{$key}}"
                                    @if($search_params['level_scope'] == $key)
                                    selected
                                    @endif
                            >{{$value}}</option>
                        @endforeach
                    </select>
                </fieldset>
            </div>
        </div>
        <div class="resize-triggers">
            <div class="expand-trigger">
                <div style="width: 1181px; height: 669px;"></div>
            </div>
            <div class="contract-trigger"></div>
        </div>
    </div>
</div>