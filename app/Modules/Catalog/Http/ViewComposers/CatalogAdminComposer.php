<?php
namespace App\Modules\Catalog\Http\ViewComposers;

use Illuminate\View\View;

class CatalogAdminComposer
{


    public function compose(View $view){

        $technical = '
            <table class="technical">
		     					<thead>
		     						<tr>
		     							<td colspan="2">Технические характеристики</td>
		     						</tr>
		     					</thead>
		     					<tbody>
		     						<tr>
		     							<td>Тип ячейки:</td>
		     							<td style="min-width: 100px;""></td>
		     						</tr>
		     						<tr>
		     							<td>Класс ячейки:</td>
		     							<td style="min-width: 100px;""></td>
		     						</tr>
		     						<tr>
		     							<td>Размеры модуля AxBxC:</td>
		     							<td style="min-width: 100px;""></td>
		     						</tr>
		     						<tr>
		     							<td>Вес:</td>
		     							<td style="min-width: 100px;""></td>
		     						</tr>
		     						<tr>
		     							<td>Фронтальная часть (толщина):</td>
		     							<td style="min-width: 100px;""></td>
		     						</tr>
		     						<tr>
		     							<td>Кол-во диодов:</td>
		     							<td style="min-width: 100px;""></td>
		     						</tr>
		     						<tr>
		     							<td>Кабель (диаметр, длина):</td>
		     							<td style="min-width: 100px;""></td>
		     						</tr>
		     						<tr>
		     							<td>Тип коннектора:</td>
		     							<td style="min-width: 100px;""></td>
		     						</tr>
		     						<tr>
		     							<td>Распред. коробка (ур. защиты)</td>
		     							<td style="min-width: 100px;""></td>
		     						</tr>
		     						<tr>
		     							<td>Рама (материал):</td>
		     							<td style="min-width: 100px;""></td>
		     						</tr>
		     						<tr>
		     							<td>Максимальная нагрузка:</td>
		     							<td style="min-width: 100px;""></td>
		     						</tr>
		     						<tr>
		     							<td>Температура эксплуатации:</td>
		     							<td style="min-width: 100px;""></td>
		     						</tr>
		     						<tr>
		     							<td>Номинальная рабочая t°C:</td>
		     							<td style="min-width: 100px;""></td>
		     						</tr>
		     					</tbody>
		     				</table>
        ';

        $electrical = '
            <table class="electrical">
		     					<thead>
		     						<tr>
		     							<td class="head" colspan="2">Технические характеристики</td>
		     						</tr>
		     					</thead>
		     					<tbody>
		     						<tr>
		     							<td>Тип ячейки:</td>
		     							<td style="min-width: 100px;"></td>
		     						</tr>
		     						<tr>
		     							<td>Класс ячейки:</td>
		     							<td style="min-width: 100px;"></td>
		     						</tr>
		     						<tr>
		     							<td>Размеры модуля AxBxC:</td>
		     							<td style="min-width: 100px;"></td>
		     						</tr>
		     						<tr>
		     							<td>Вес:</td>
		     							<td style="min-width: 100px;"></td>
		     						</tr>
		     						<tr>
		     							<td>Фронтальная часть (толщина):</td>
		     							<td style="min-width: 100px;"></td>
		     						</tr>
		     						<tr>
		     							<td>Кол-во диодов:</td>
		     							<td style="min-width: 100px;"></td>
		     						</tr>
		     						<tr>
		     							<td>Кабель (диаметр, длина):</td>
		     							<td style="min-width: 100px;"></td>
		     						</tr>
		     						<tr>
		     							<td>Тип коннектора:</td>
		     							<td style="min-width: 100px;"></td>
		     						</tr>
		     						<tr>
		     							<td>Распред. коробка (ур. защиты)</td>
		     							<td style="min-width: 100px;"></td>
		     						</tr>
		     						<tr>
		     							<td>Рама (материал):</td>
		     							<td style="min-width: 100px;"></td>
		     						</tr>
		     						<tr>
		     							<td>Максимальная нагрузка:</td>
		     							<td style="min-width: 100px;"></td>
		     						</tr>
		     						<tr>
		     							<td>Температура эксплуатации:</td>
		     							<td style="min-width: 100px;"></td>
		     						</tr>
		     						<tr>
		     							<td>Номинальная рабочая t°C:</td>
		     							<td style="min-width: 100px;"></td>
		     						</tr>
		     					</tbody>
		     				</table>
        ';

        $view->with('technical', $technical);
        $view->with('electrical', $electrical);
    }
}