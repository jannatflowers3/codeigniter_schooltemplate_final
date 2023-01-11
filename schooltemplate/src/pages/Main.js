import React from 'react'
import Footer from '../components/Footer'
import Header from '../components/Header'
import { Outlet } from 'react-router-dom'
export default function Main() {
  return (
    <>
    <Header/>
    <Outlet/>
    <Footer/>
    </>
  )
}
