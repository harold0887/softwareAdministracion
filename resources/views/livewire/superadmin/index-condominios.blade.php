<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="d-flex flex-column mx-3 mt-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Condominios</h5>
                        </div>

                        <a href="" class="btn btn-info btn-sm mb-0" type="button">+ Nuevo condominio</a>

                    </div>

                    <div class="d-flex flex-row justify-content-between">
                        <div class="d-flex mt-3 align-items-center justify-content-center">
                            <p class="text-secondary pt-2">Ver</p>
                            <select wire:model="perPage" class="form-control p-2 mb-1 mx-1">
                                <option value="5">{{ __('5') }}</option>
                                <option selected value="10">{{ __('10') }}</option>
                                <option value="15">{{ __('15') }}</option>
                                <option value="20">{{ __('20') }}</option>
                            </select>
                            <p class="text-secondary pt-2">Entradas</p>
                        </div>


                        <div class="mt-3 w-50">


                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <input wire:model='search' class="form-control" placeholder="Buscar por nombre..." type="text">
                                    @if ($search != '')
                                    <span class="input-group-text" style="cursor:pointer" wire:click="clearSearch()"><i class="material-icons my-auto mx-1 text-lg text-danger">close</i></span>
                                    @endif
                                </div>
                            </div>

                        </div>




                    </div>
                </div>
                @if(isset($condominios) && $condominios->count()>0)
                <div class="table-responsive mx-3 ">
                    <table class="table table-flush table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-xs text-secondary text-uppercase" style="cursor:pointer !important" wire:click="setSort('id')">
                                    @if($sortField=='id')
                                    @if($sortDirection=='asc')
                                    <i class="fas fa-sort-up "></i>
                                    @else
                                    <i class="fas fa-sort-down "></i>
                                    @endif
                                    @else
                                    <i class="fas fa-sort "></i>
                                    @endif
                                    Id
                                </th>
                                <th class="text-xs text-secondary text-uppercase" style="cursor:pointer !important" wire:click="setSort('name')">
                                    @if($sortField=='name')
                                    @if($sortDirection=='asc')
                                    <i class="fas fa-sort-up "></i>
                                    @else
                                    <i class="fas fa-sort-down "></i>
                                    @endif
                                    @else
                                    <i class="fas fa-sort "></i>
                                    @endif
                                    Nombre
                                </th>
                                <th class="text-xs text-secondary text-uppercase" style="cursor:pointer !important" wire:click="setSort('direccion')">
                                    @if($sortField=='direccion')
                                    @if($sortDirection=='asc')
                                    <i class="fas fa-sort-up "></i>
                                    @else
                                    <i class="fas fa-sort-down "></i>
                                    @endif
                                    @else
                                    <i class="fas fa-sort "></i>
                                    @endif
                                    Direccion
                                </th>
                                <th class="text-xs text-secondary text-uppercase" style="cursor:pointer !important" wire:click="setSort('cp')">
                                    @if($sortField=='cp')
                                    @if($sortDirection=='asc')
                                    <i class="fas fa-sort-up "></i>
                                    @else
                                    <i class="fas fa-sort-down "></i>
                                    @endif
                                    @else
                                    <i class="fas fa-sort "></i>
                                    @endif
                                    Codigo Postal
                                </th>
                                <th class="text-xs text-secondary text-uppercase" style="cursor:pointer !important" wire:click="setSort('estado')">
                                    @if($sortField=='estado')
                                    @if($sortDirection=='asc')
                                    <i class="fas fa-sort-up "></i>
                                    @else
                                    <i class="fas fa-sort-down "></i>
                                    @endif
                                    @else
                                    <i class="fas fa-sort "></i>
                                    @endif
                                    Estado
                                </th>
                                <th class="text-xs text-secondary text-uppercase" style="cursor:pointer !important" wire:click="setSort('status')">
                                    @if($sortField=='status')
                                    @if($sortDirection=='asc')
                                    <i class="fas fa-sort-up "></i>
                                    @else
                                    <i class="fas fa-sort-down "></i>
                                    @endif
                                    @else
                                    <i class="fas fa-sort "></i>
                                    @endif
                                    Status
                                </th>
                                <th class="text-xs text-secondary text-uppercase" style="cursor:pointer !important" wire:click="setSort('name')">
                                    @if($sortField=='created_at')
                                    @if($sortDirection=='asc')
                                    <i class="fas fa-sort-up "></i>
                                    @else
                                    <i class="fas fa-sort-down "></i>
                                    @endif
                                    @else
                                    <i class="fas fa-sort "></i>
                                    @endif
                                    Registro
                                </th>

                                <th class="text-xs text-secondary text-uppercase">
                                    Acciones

                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($condominios) && $condominios->count()>0)

                            @foreach($condominios as $condominio)
                            <tr class="{{ $condominio->status == 0 ? 'table-danger' : '' }}">
                                <td class="text-xs  align-middle">
                                    <span class="my-2 text-xs">
                                        {{$condominio->id}}
                                    </span>
                                </td>
                                <td class="text-xs  align-middle">
                                    <span class="my-2 text-xs">
                                        {{$condominio->name}}
                                    </span>
                                </td>
                                <td class="text-xs  align-middle">
                                    <span class="my-2 text-xs">
                                        {{$condominio->direccion}}
                                    </span>
                                </td>
                                <td class="text-xs  align-middle">
                                    <span class="my-2 text-xs">
                                        {{$condominio->cp}}
                                    </span>
                                </td>
                                <td class="text-xs  align-middle">
                                    <span class="my-2 text-xs">
                                        {{$condominio->estado}}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-switch text-center" >
                                        <input class="form-check-input" type="checkbox" wire:click="changeStatus({{ $condominio->id}})" {{ $condominio->status == 1 ? 'checked ' : '' }} >
                                    </div>
                                </td>
                                <td class="text-xs  align-middle">
                                    <span class="my-2 text-xs">
                                        {{date_format($condominio->created_at, 'd-M-Y')}}
                                    </span>
                                </td>
                                <td class="text-xs  align-middle">
                                    <span class="my-2 text-xs">
                                        <a href="" class="mx-3">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>

                                        <span>
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                    </span>
                                </td>
                            </tr>
                            @endforeach



                            @endif


                        </tbody>
                    </table>
                </div>

                @else

                <div class="alert alert-warning alert-dismissible fade show mx-3 py-1" role="alert">
                    <span class="alert-text"><strong>Oupps!</strong> No encontramos resultados!</span>
                </div>

                @endif






                <div id="datatable-bottom">
                    {{ $condominios->links() }}
                </div>
            </div>
        </div>
    </div>
</div>