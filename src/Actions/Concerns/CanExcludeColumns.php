<?php

namespace AlperenErsoy\FilamentExport\Actions\Concerns;

// --- EXCLUDE COLUMNS
trait CanExcludeColumns
{
    protected array $excludedColumns = [];

    public function excludeColumns(array $columns): static
    {
        $this->excludedColumns = $columns;
        return $this;
    }

    public function getExcludedColumns(): array
    {
        return $this->excludedColumns;
    }
}