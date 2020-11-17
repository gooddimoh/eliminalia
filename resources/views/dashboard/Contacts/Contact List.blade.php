@extends('layouts.default')

@section('title', 'Basic Tables')

@section('content')
    <div class="col-xl-12">
        <div class="row">
            <form action="register" method="post" class="col-xl-12">
                <div class="filter-inputs">
                    <div class="commercial">
                        <select class="form-control mb-3">
                            <option value="" selected="">Select a Country</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                        </select>
                    </div>
                    <input type="text" name="" value="0">Not signed
                    <input type="text" name="" value="1">Signed
                    <input type="text" name="" value="2">Discarded
                    <input type="text" name="" value="3">All
                    <input type="text" name="" value="4">No tracking (T)
                    <input type="text" name="" value="5">No budget (B)
                    <input type="text" name="" value="6">Doc. not sended (D)
                    <input type="text" name="" value="7">Doc. sended (D)
                    <input type="text" name="" value="8">With tracking (T)
                    <input type="text" name="" value="9">With budget (B)
                </div>
            </form>
            <table>
                @php
                    $contacts =  ["contact1" => "contacts1", "contact2" => "contact2"];
                @endphp
                <tr>
                    <table class="table table-td-valign-middle">
                        <tbody>
                        <tr>
                            <td class="with-checkbox">...</td>

                            <td class="with-radio">...</td>

                            <td class="with-form-control">{{$contacts["contact1"]}}</td>

                            <td class="with-input-control">{{$contacts["contact2"]}}</td>
                        </tr>
                        </tbody>
                    </table>
            </table>
            {{-- search --}}
            {{-- checkboxes --}}
            {{--    pagination --}}
        </div>
    </div>
@endsection
<style type="text/css">
    .costumedisplay {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-between;
        align-items: center;
        align-content: space-between;
    }
</style>
@push('scripts')
    <script src="{{'/assets/plugins/highlight.js/highlight.min.js'}}"></script>
    <script src="{{'/assets/js/demo/render.highlight.js'}}"></script>
@endpush
