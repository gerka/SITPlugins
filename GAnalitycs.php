<script type="text/javascript">
	
</script>
<?php

/**
* Автор: Верещак Герман 
* E-mail: gerka23@gmail.com
* GitHub: gerka23
*/
class GAnalytic
{
	
	function __construct(argument)
	{
		echo "
			
		";
	}

	public function ImpressionData($value='.product_catalog > li')
	{
		$result = "$(".$value.").each(function(){
		i = i+1;
		product_catalog[i] = {
		            // объект - impressionFieldObject
		  'id': ID,                   // ID товара (string). Обязательный!
		  'name': name, // Название товара (string). Обязательный!
		  'category': category,   // Категория товара (string).
		  'brand': brand,                // Бренд (string).
		  'variant': variant,               // Варианты товара (например, цвет) (string).
		  'list': list,         // Список, которому принадлежит товар (string).
		  'position': i                 // Номер в списке товаров (number).  
		}
	}
 		ga('ec:addImpression', product_catalog[i]);
		ga('ec:setAction', 'detail');
			}"
			return $result;
			

	public function ProductData($value='')
	{
		ga('ec:addProduct', {               // Объект - productFieldObject.
			  'id': 'P12345',                   // ID товара (string). Обязательный!
			  'name': 'Android Warhol T-Shirt', // Название товара (string).
			  'category': 'Apparel',            // Категория товара (string).
			  'brand': 'Google',                // Product brand (string).
			  'variant': 'Black',               // Product variant (string).
			  'position': 1                    // Product position (number).
			});
	}

	public function PromotionData($value='')
	{
		ga('ec:addPromo', {               // Объект - promoFieldObject.
		  'id': 'PROMO_1234',             // Идентификатор акции (string). Обязательный!
		  'name': 'Summer Sale',          // Название акции (string). Обязательный!
		  'creative': 'summer_banner2',   // Источник перехода (например, баннер), (string).
		  'position': 'banner_slot1'      // Тип (например, позиция в слайдере), (string).
		});
	}

	public function ActionData($value='')
	{
		ga('ec:setAction', 'purchase', {          // Объект -  actionFieldObject.
		  'id': 'T12345',                         // ID товара (string). Обязательный!
		  'affiliation': 'Google Store - Online', // Магазин, в котором произошла сделка (string).
		  'revenue': '37.39',                     // Общая стоимость.
		  'tax': '2.85',                          // Налог.
		  'shipping': '5.34',                     // Доставка.
		  'coupon': 'SUMMER2013'                  // Купон (промо-код) (string).
		});
	}

	public function PPActions($value='')
	{
		ga('ec:setAction', 'click', {       // действие.
			  'list': 'Search Results'          // Список товаров (string).
			});
	}

	public function RefundsData($value='')
	{
		ga('ec:setAction', 'refund', {
			  'id': 'T12345'    // ID транзакции.
			});
	}

}

?>