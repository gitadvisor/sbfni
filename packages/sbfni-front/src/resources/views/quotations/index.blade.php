<x-pondit-limitless-master>
    <x-pondit-limitless-toast />
    <x-pondit-pl-card cardTitle="Quotations">
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
            @foreach ($quotations as $quotation)
            <tr>
                <td>{{ $loop->iteration }}</td>
                @foreach ($columns as $key => $column)
                    <td>{{ $quotation->$key }}</td>
                @endforeach
                <td class="d-flex justify-content-center">
                    <x-pondit-pl-btn-view href="{{route('quotations.show', $quotation->id)}}" />
                    <x-pondit-pl-btn-edit href="{{route('quotations.edit', $quotation->id)}}" />
                    <x-pondit-pl-btn-delete url="{{route('quotations.delete', $quotation->id)}}" />
                </td>
            </tr>
            @endforeach
        </x-pondit-pl-table>
        <x-slot name="cardFooter">
            <div></div>
            <div>
                <x-pondit-pl-btn-create href="{{ route('quotations.create')}}" />
            </div>
            <div></div>
        </x-slot>
    </x-pondit-pl-card>

</x-pondit-limitless-master>
