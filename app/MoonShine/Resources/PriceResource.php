<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Price;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Position;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Support\Attributes\SearchBy;

/**
 * @extends ModelResource<Price>
 */
class PriceResource extends ModelResource
{
    protected string $model = Price::class;

    protected string $title = 'Прайс';
    protected string $column = 'section';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Раздел', 'section'),
            Text::make('Подраздел', 'subsection'),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('Раздел', 'section'),
                Text::make('Подраздел', 'subsection'),
                TinyMce::make('Описание', 'description'),
                Json::make('Позиции', 'positions')->fields([
                    Position::make(),
                    Text::make('Наименование', 'name'),
                    Text::make('Цена', 'price'),
                ])->removable(),
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Раздел', 'section'),
            Text::make('Подраздел', 'subsection'),
            TinyMce::make('Описание', 'description'),
            Json::make('Позиции', 'positions')->fields([
                Position::make(),
                Text::make('Наименование', 'name'),
                Text::make('Цена', 'price'),
            ])->removable(),
        ];
    }

    /**
     * @param Price $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'section' => 'required|string',
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Раздел', 'section'),
            Text::make('Подраздел', 'subsection'),
        ];
    }
}
