<?php

// 2. Improve usability

// Add naming suggestions for code blocks
class Foo
{


if (true)
{
    // my super comment
$options = [];
if ($arr = $this->getItem()->getOrderItem()->getProductOptions())
{
$options = $arr["foo"];
}

return $options;
}

class M
{
    public static function throwException(string $string)
    {
    }
}


// comment naming
class C
{
    public Order $order;

    protected function process($params = [])
    {
        //region ...
        echo '...';
        //endregion

        // check transaction amount if currency matches
        $this->checkTransactionAmountIfCurrencyMatches($params);

        //region ...
        echo '...';
        //endregion
    }

    protected function checkTransactionAmountIfCurrencyMatches(mixed $params): void
    {
        if ($this->order->getOrderCurrencyCode() == $params['mb_currency']) {
            if (round($this->order->getGrandTotal(), 2) != $params['mb_amount']) {
                M::throwException('Transaction amount does not match.');
            }
        }
    }


}