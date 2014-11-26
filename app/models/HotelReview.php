<?php

class HotelReview extends Eloquent
{
	protected $table = 'hotel_reviews';
	
	protected $fillable = ['review',
							'review_oleh',
							'rate',
							'id_hotel'];
}
