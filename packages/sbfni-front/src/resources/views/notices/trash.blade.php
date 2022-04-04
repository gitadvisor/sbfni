<x-pondit-limitless-master>
    <x-pondit-limitless-toast />
    <x-pondit-pl-card cardTitle="Notices">
        <x-pondit-pl-table>
            <x-slot name="thead">
                <tr>
                    <th>{{__('SL')}}</th>
                    @foreach ($columns as $column)
                        <th>{{ $column }}</th>
                    @endforeach
                    <th>{{__('Actions')}}</th>
                </tr>
            </x-slot>
            @foreach ($notices as $notice)
            <tr>
                <td>{{ $loop->iteration }}</td>
                @foreach ($columns as $key => $column)
                    <td>{{ $notice->$key }}</td>
                @endforeach
                <td class="d-flex justify-content-center">
                    // <x-pondit-pl-btn icon="re-cycle" tooltip="Restore" href="{{ route('notices.restore') }}" />
                </td>
            </tr>
            @endforeach
        </x-pondit-pl-table>
        <x-slot name="cardFooter">
            <div></div>
            <div>
                <x-pondit-pl-btn icon="list" tooltip="List" href="{{ route('notices.index') }}" />
            </div>
            <div></div>
        </x-slot>
    </x-pondit-pl-card>

</x-pondit-limitless-master>

