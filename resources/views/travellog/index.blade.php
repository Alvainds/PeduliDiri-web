<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Travel Log') }}
        </h2>
    </x-slot>
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Diary</h4>
                    <div class="text-right">
                        <h2 class="font-weight-light mb-0"><i class="ti-arrow-up text-success"></i> {{
                            $todayLog->count() }}
                        </h2>
                        <span class="text-muted">Todays Log</span>
                    </div>
                    <span class="text-success">{{ $todayLog->count() == 0 && $travellogs->count() == 0 ? '0' :
                        round($todayLog->count() /
                        $travellogs->count() * 100) }}%</span>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar"
                            style="width: {{ $todayLog->count() == 0 && $travellogs->count() == 0 ? '0' : $todayLog->count() / $travellogs->count() * 100 }}%; height: 6px;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Checked</h4>
                    <div class="text-right">
                        <h2 class="font-weight-light mb-0"><i class="ti-arrow-up text-info"></i> {{ $checked->count() }}
                        </h2>
                        <span class="text-muted">Todays Checked</span>
                    </div>
                    <span class="text-info">{{ $checked->count() == 0 && $travellogs->count() == 0 ? '0' : $percent =
                        round($checked->count() / $travellogs->count() *
                        100,0) }}%</span>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar"
                            style="width: {{ $checked->count() == 0 && $travellogs->count() == 0 ? '0' : $checked->count() / $travellogs->count() * 100 }}%; height: 6px;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Monthly Diary</h4>
                    <div class="text-right">
                        <h2 class="font-weight-light mb-0"><i class="ti-arrow-up text-purple"></i> {{
                            $monthLog->count() }}
                        </h2>
                        <span class="text-muted">Monthly</span>
                    </div>
                    <span class="text-purple">{{ round($monthLog->count() == 0 && $travellogs->count() == 0 ? '0' :
                        $monthLog->count() / $travellogs->count() * 100) }}%</span>
                    <div class="progress">
                        <div class="progress-bar bg-purple" role="progressbar" style="width: {{ $monthLog->count() == 0 && $travellogs->count() == 0 ? '0' :
                        $monthLog->count() / $travellogs->count() * 100 }}%; height: 6px;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Unchecked</h4>
                    <div class="text-right">
                        <h2 class="font-weight-light mb-0"><i class="ti-arrow-down text-danger"></i> {{
                            $checkout->count() }}
                        </h2>
                        <span class="text-muted">Todays Uncheck</span>
                    </div>
                    <span class="text-danger">{{ $checkout->count() == 0 && $travellogs->count() == 0 ? '0' :
                        $percent = round(
                        $checkout->count() / $travellogs->count() * 100) }}%</span>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar"
                            style="width: {{ $checkout->count() == 0 && $travellogs->count() == 0 ? '0' : $checkout->count() / $travellogs->count() * 100 }}%; height: 6px;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Default Table</h4>
            <h6 class="card-subtitle mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero veritatis
                odit
                eum iure eaque eligendi eos perferendis odio tenetur ipsa? A eveniet iusto molestiae aliquid soluta
                maxime voluptatem sunt ad.</h6>

            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif




            <div class="table-responsive mt-2">
                <table id="table_id" class="table table-hover stylish-table mb-0 mt-2 no-wrap v-middle">
                    <thead>
                        <tr>
                            <th class="font-weight-normal text-muted border-0 border-bottom">No</th>
                            <th class="font-weight-normal text-muted border-0 border-bottom">Lokasi</th>
                            <th class="font-weight-normal text-muted border-0 border-bottom">Tanggal
                            </th>
                            <th class="font-weight-normal text-muted border-0 border-bottom">checkin
                            </th>
                            <th class="font-weight-normal text-muted border-0 border-bottom">checkout
                            </th>
                            <th class="font-weight-normal text-muted border-0 border-bottom">Temperature
                            </th>

                            <th class="font-weight-normal text-muted border-0 border-bottom">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="">

                        @foreach ($travellogs as $travellog)
                        <tr>

                            <th class="py-4 " scope="row">

                                {{ $loop->iteration }}



                                <i
                                    class="bi bi-cursor-fill px-2 {{ (is_null($travellog->checkout)) ? 'text-warning fw-bold ' : 'text-success' }}"></i>

                            </th>
                            <td class="py-4 ">
                                <h6 class="font-weight-medium mb-0 nowrap">
                                    <a href="{{ route('Travellog.show', $travellog->id) }}" class="link">{{
                                        $travellog->location }}</a>
                                </h6>

                                <small class="text-muted no-wrap">Location</small>
                            </td>
                            <td class="py-4 font-weight-medium mb-0 text-secondary nowrap">{{
                                Carbon\Carbon::parse($travellog->date)->format('M d Y') }}
                            </td>
                            <td class="py-4 font-weight-medium mb-0 text-secondary nowrap">{{
                                Carbon\Carbon::parse($travellog->checkin)->format('H:i') }}
                            </td>
                            <td class="py-4 font-weight-medium mb-0 text-secondary nowrap">

                                @if (is_null($travellog->checkout))


                                <form class="btn-group"
                                    action="{{ route('Travellog.checkout', ['id' => $travellog->id]) }}" method="post">
                                    {{ csrf_field() }}

                                    <input type="submit"
                                        class="btn btn-warning btn-sm font-weight-medium rounded-pill px-4"
                                        value="Checkout" />
                                </form>
                                @else

                                <i class="bi bi-check-lg text-success"></i>

                                <span class="text-success">Checked in</span>
                                {{ Carbon\Carbon::parse($travellog->checkout)->format('H:i') }}


                                @endif
                            </td>
                            <td class="py-4 font-weight-medium mb-0 text-secondary nowrap 
                                {{ $travellog->temperature > 36 ? 'text-danger fw-bold  ' : '' }}">
                                {{ $travellog->temperature }}℃</td>
                            <td class="py-3 ">

                                <form action="{{ route('Travellog.destroy', $travellog->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="btn btn-sm btn-danger rounded-pill px-4 fw-bold show_confirm mb-2"><i
                                            class="bi bi-trash-fill"></i></button>
                                </form>
                                <a class="btn btn-sm btn-success rounded-pill px-4 fw-bold "
                                    href="{{ route('Travellog.edit', $travellog->id) }}">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                            </td>
                        </tr>


                        @endforeach

                    </tbody>
                </table>


            </div>


            <div class="d-grid gap-2 mt-3 d-md-flex justify-content-md-end">
                <a href="{{ route('Travellog.create') }}" class=" btn btn-dark">Isi
                    Catatan Perjalanan</a>
            </div>




        </div>

    </div>



</x-app-layout>