<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property string $key
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Collection|House[] $houses
 * @property-read int|null $houses_count
 * @method static Builder|Category newModelQuery()
 * @method static Builder|Category newQuery()
 * @method static \Illuminate\Database\Query\Builder|Category onlyTrashed()
 * @method static Builder|Category query()
 * @method static Builder|Category whereCreatedAt($value)
 * @method static Builder|Category whereDeletedAt($value)
 * @method static Builder|Category whereId($value)
 * @method static Builder|Category whereKey($value)
 * @method static Builder|Category whereName($value)
 * @method static Builder|Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Category withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Category withoutTrashed()
 * @mixin Eloquent
 * @method static \Database\Factories\CategoryFactory factory(...$parameters)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Commissioner
 *
 * @property int $id
 * @property string $key
 * @property int $user_id
 * @property string|null $phone_number
 * @property string|null $address
 * @property string|null $images
 * @property string|null $email
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Collection|House[] $apartments
 * @property-read int|null $apartments_count
 * @property-read User $user
 * @method static Builder|Commissioner newModelQuery()
 * @method static Builder|Commissioner newQuery()
 * @method static \Illuminate\Database\Query\Builder|Commissioner onlyTrashed()
 * @method static Builder|Commissioner query()
 * @method static Builder|Commissioner whereAddress($value)
 * @method static Builder|Commissioner whereCreatedAt($value)
 * @method static Builder|Commissioner whereDeletedAt($value)
 * @method static Builder|Commissioner whereEmail($value)
 * @method static Builder|Commissioner whereId($value)
 * @method static Builder|Commissioner whereImages($value)
 * @method static Builder|Commissioner whereKey($value)
 * @method static Builder|Commissioner wherePhoneNumber($value)
 * @method static Builder|Commissioner whereUpdatedAt($value)
 * @method static Builder|Commissioner whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Commissioner withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Commissioner withoutTrashed()
 * @mixin Eloquent
 * @method static \Database\Factories\CommissionerFactory factory(...$parameters)
 */
	class Commissioner extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Detail
 *
 * @property int $id
 * @property string $key
 * @property int $house_id
 * @property int|null $room_number
 * @property int|null $number_pieces
 * @property string $toilet
 * @property int $electricity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read House $house
 * @method static Builder|Detail newModelQuery()
 * @method static Builder|Detail newQuery()
 * @method static \Illuminate\Database\Query\Builder|Detail onlyTrashed()
 * @method static Builder|Detail query()
 * @method static Builder|Detail whereCreatedAt($value)
 * @method static Builder|Detail whereDeletedAt($value)
 * @method static Builder|Detail whereElectricity($value)
 * @method static Builder|Detail whereHouseId($value)
 * @method static Builder|Detail whereId($value)
 * @method static Builder|Detail whereKey($value)
 * @method static Builder|Detail whereNumberPieces($value)
 * @method static Builder|Detail whereRoomNumber($value)
 * @method static Builder|Detail whereToilet($value)
 * @method static Builder|Detail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Detail withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Detail withoutTrashed()
 * @mixin Eloquent
 * @method static \Database\Factories\DetailFactory factory(...$parameters)
 */
	class Detail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\House
 *
 * @property int $id
 * @property string $key
 * @property int $prices
 * @property string $commune
 * @property string $town
 * @property string $district
 * @property string $address
 * @property int $guarantees
 * @property string $phone_number
 * @property string $email
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string $images
 * @property mixed $status
 * @property string $reference
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property int $type_id
 * @property-read Collection|Category[] $categories
 * @property-read int|null $categories_count
 * @property-read Detail|null $detail
 * @property-read string|null $coordinate
 * @property-read string $map_popup_content
 * @property-read string $name_link
 * @property-read Collection|Image[] $image
 * @property-read int|null $image_count
 * @property-read Collection|Reservation[] $reservations
 * @property-read int|null $reservations_count
 * @property-read Type $type
 * @property-read User $user
 * @method static Builder|House newModelQuery()
 * @method static Builder|House newQuery()
 * @method static \Illuminate\Database\Query\Builder|House onlyTrashed()
 * @method static Builder|House query()
 * @method static Builder|House whereAddress($value)
 * @method static Builder|House whereCommune($value)
 * @method static Builder|House whereCreatedAt($value)
 * @method static Builder|House whereDeletedAt($value)
 * @method static Builder|House whereDistrict($value)
 * @method static Builder|House whereEmail($value)
 * @method static Builder|House whereGuarantees($value)
 * @method static Builder|House whereId($value)
 * @method static Builder|House whereImages($value)
 * @method static Builder|House whereKey($value)
 * @method static Builder|House whereLatitude($value)
 * @method static Builder|House whereLongitude($value)
 * @method static Builder|House wherePhoneNumber($value)
 * @method static Builder|House wherePrices($value)
 * @method static Builder|House whereReference($value)
 * @method static Builder|House whereStatus($value)
 * @method static Builder|House whereTown($value)
 * @method static Builder|House whereTypeId($value)
 * @method static Builder|House whereUpdatedAt($value)
 * @method static Builder|House whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|House withTrashed()
 * @method static \Illuminate\Database\Query\Builder|House withoutTrashed()
 * @mixin Eloquent
 * @method static \Database\Factories\HouseFactory factory(...$parameters)
 */
	class House extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Image
 *
 * @property int $id
 * @property string $key
 * @property string $images
 * @property int $house_id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read House $houses
 * @method static Builder|Image newModelQuery()
 * @method static Builder|Image newQuery()
 * @method static \Illuminate\Database\Query\Builder|Image onlyTrashed()
 * @method static Builder|Image query()
 * @method static Builder|Image whereCreatedAt($value)
 * @method static Builder|Image whereDeletedAt($value)
 * @method static Builder|Image whereHouseId($value)
 * @method static Builder|Image whereId($value)
 * @method static Builder|Image whereImages($value)
 * @method static Builder|Image whereKey($value)
 * @method static Builder|Image whereUpdatedAt($value)
 * @method static Builder|Image whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Image withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Image withoutTrashed()
 * @mixin Eloquent
 * @method static \Database\Factories\ImageFactory factory(...$parameters)
 */
	class Image extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Reservation
 *
 * @property int $id
 * @property string $key
 * @property int|null $user_id
 * @property int $house_id
 * @property mixed $status
 * @property string $name
 * @property string $address
 * @property string $phones
 * @property string $messages
 * @property string $reference
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read House $house
 * @property-read User|null $user
 * @method static Builder|Reservation newModelQuery()
 * @method static Builder|Reservation newQuery()
 * @method static \Illuminate\Database\Query\Builder|Reservation onlyTrashed()
 * @method static Builder|Reservation query()
 * @method static Builder|Reservation whereAddress($value)
 * @method static Builder|Reservation whereCreatedAt($value)
 * @method static Builder|Reservation whereDeletedAt($value)
 * @method static Builder|Reservation whereHouseId($value)
 * @method static Builder|Reservation whereId($value)
 * @method static Builder|Reservation whereKey($value)
 * @method static Builder|Reservation whereMessages($value)
 * @method static Builder|Reservation whereName($value)
 * @method static Builder|Reservation wherePhones($value)
 * @method static Builder|Reservation whereReference($value)
 * @method static Builder|Reservation whereStatus($value)
 * @method static Builder|Reservation whereUpdatedAt($value)
 * @method static Builder|Reservation whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Reservation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Reservation withoutTrashed()
 * @mixin Eloquent
 * @method static \Database\Factories\ReservationFactory factory(...$parameters)
 */
	class Reservation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $key
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Collection|User[] $users
 * @property-read int|null $users_count
 * @method static Builder|Role newModelQuery()
 * @method static Builder|Role newQuery()
 * @method static \Illuminate\Database\Query\Builder|Role onlyTrashed()
 * @method static Builder|Role query()
 * @method static Builder|Role whereCreatedAt($value)
 * @method static Builder|Role whereDeletedAt($value)
 * @method static Builder|Role whereId($value)
 * @method static Builder|Role whereKey($value)
 * @method static Builder|Role whereName($value)
 * @method static Builder|Role whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Role withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Role withoutTrashed()
 * @mixin Eloquent
 * @method static \Database\Factories\RoleFactory factory(...$parameters)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Type
 *
 * @property int $id
 * @property string $key
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Collection|House[] $houses
 * @property-read int|null $houses_count
 * @method static Builder|Type newModelQuery()
 * @method static Builder|Type newQuery()
 * @method static \Illuminate\Database\Query\Builder|Type onlyTrashed()
 * @method static Builder|Type query()
 * @method static Builder|Type whereCreatedAt($value)
 * @method static Builder|Type whereDeletedAt($value)
 * @method static Builder|Type whereId($value)
 * @method static Builder|Type whereKey($value)
 * @method static Builder|Type whereName($value)
 * @method static Builder|Type whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Type withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Type withoutTrashed()
 * @mixin Eloquent
 * @method static \Database\Factories\TypeFactory factory(...$parameters)
 */
	class Type extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $key
 * @property string $name
 * @property string $email
 * @property string|null $phone_number
 * @property string|null $last_name
 * @property string $password
 * @property string|null $images
 * @property int $role_id
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Commissioner|null $commissioner
 * @property-read Collection|House[] $house
 * @property-read int|null $house_count
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection|Reservation[] $reservations
 * @property-read int|null $reservations_count
 * @property-read Role|null $role
 * @property-read Collection|PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static UserFactory factory(...$parameters)
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static Builder|User query()
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereDeletedAt($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereImages($value)
 * @method static Builder|User whereKey($value)
 * @method static Builder|User whereLastName($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User wherePhoneNumber($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereRoleId($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 * @mixin Eloquent
 */
	class User extends \Eloquent {}
}

