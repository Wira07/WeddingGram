<?php

namespace App\Filament\Resources\WeddingTestimonials\Pages;

use App\Filament\Resources\WeddingTestimonials\WeddingTestimonialResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditWeddingTestimonial extends EditRecord
{
    protected static string $resource = WeddingTestimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
