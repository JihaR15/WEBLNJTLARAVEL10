<?php

namespace App\DataTables;

use App\Models\KategoriModel;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class KategoriDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($kategori) {
                $btn = '<div class="d-flex gap-2">';
                $btn .= '<a href="/kategori/edit/' . $kategori->kategori_id . '" class="btn btn-sm btn-primary my-1 d-flex gap-1 align-items-center"><i class="bi bi-pencil-square"></i>Edit</a>';
                $btn .= '<a href="/kategori/hapus/' . $kategori->kategori_id . '" class="btn btn-sm btn-danger my-1 d-flex gap-1 align-items-center" 
                        onclick="return confirmDelete(' . $kategori->kategori_id . ')"><i class="bi bi-trash3"></i>Hapus</a>';
                $btn .= '</div>';
                return $btn;
            })
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(KategoriModel $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('kategori-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip') //aktifkan ini jika button excel,csv,pdf dll ingin muncul
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('kategori_id'), 
            Column::make('kategori_kode'), 
            Column::make('kategori_nama'), 
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Kategori_' . date('YmdHis');
    }
}
