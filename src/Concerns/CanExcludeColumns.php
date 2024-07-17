<?php

namespace AlperenErsoy\FilamentExport\Concerns;

use Illuminate\Support\Collection;

trait CanExcludeColumns
{
    protected Collection $excludedColumns;

    public function excludeColumns(array|Collection $columns): static
    {
        $this->excludedColumns = collect($columns);

        return $this;
    }

    public function getExcludedColumns(): Collection
    {
        return $this->excludedColumns ?? collect();
    }
}