import { Link } from '@inertiajs/inertia-react'
import React from 'react'

export default function About({ rayees }){
	return (
		<div>
			<Link href="/">Home</Link>
			<div>About - {rayees}</div>
		</div>
	)
}