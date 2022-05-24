import React from 'react'
import { Link, usePage } from '@inertiajs/inertia-react'

export default function Home(){
	const {user} = usePage().props;
	
	return (
		<div>
			<Link href="/about">About</Link><br/>
			<Link href="/login">Login</Link><br/>
			<Link href="/">Home - welcome khan</Link>
		</div>
	)
}