<ul class="list-inline hstack gap-2 mb-0">
    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
        @if($editModal)
            <a href="javascript:void(0);" wire:click.prevent="modalEdit({{$editModal}})" class="text-muted d-inline-block">
                <i class="ri-edit-line fs-16"></i>
            </a>
        @endif
    </li>
</ul>
