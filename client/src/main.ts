import { mount } from 'svelte'
import App from './components/App.svelte'

const app = mount(App, {
  target: document.getElementById('app')!,
})

export default app
