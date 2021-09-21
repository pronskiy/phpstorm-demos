<?php

class P
{

    public function accepts($acceptingType, $acceptedType, bool $strictTypes): bool
    {
        if ($acceptingType) {
            $acceptedType = new stdClass();
        }

        if (!$acceptingType) {
            $acceptedType = new stdClass();
        }

        if ($acceptingType) {
            foreach ($acceptingType->getTypes() as $innerType) {
                if (self::accepts($innerType, $acceptedType, $strictTypes)) {
                    return true;
                }
            }

            return false;
        }

        if (true && true && true && true && true) {
            return self::accepts(
                    $acceptingType->getIterableKeyType(),
                    $acceptedType->getIterableKeyType(),
                    $strictTypes
                ) && self::accepts(
                    $acceptingType->getIterableValueType(),
                    $acceptedType->getIterableValueType(),
                    $strictTypes
                );
        }

        $accepts = $acceptingType->accepts($acceptedType, $strictTypes);

        return $this->checkUnionTypes ? $accepts->yes() : !$accepts->no();
    }
}