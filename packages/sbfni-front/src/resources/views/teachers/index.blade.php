<x-pondit-limitless-master>
    <x-pondit-limitless-toast />
    <x-pondit-pl-card cardTitle="Teachers">
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
            @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $loop->iteration }}</td>
                @foreach ($columns as $key => $column)
                    <td>{{ $teacher->$key }}</td>
                @endforeach
                <td class="d-flex justify-content-center">
                    <x-pondit-pl-btn-view href="{{route('teachers.show', $teacher->id)}}" />
                    <x-pondit-pl-btn-edit href="{{route('teachers.edit', $teacher->id)}}" />
                    <x-pondit-pl-btn-delete url="{{route('teachers.delete', $teacher->id)}}" />
                </td>
            </tr>
            @endforeach
        </x-pondit-pl-table>
        <x-slot name="cardFooter">
            <div></div>
            <div>
                <x-pondit-pl-btn-create href="{{ route('teachers.create')}}" />
            </div>
            <div></div>
        </x-slot>
    </x-pondit-pl-card>

</x-pondit-limitless-master>
