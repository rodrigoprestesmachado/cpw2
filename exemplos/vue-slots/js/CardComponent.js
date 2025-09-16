export default {
  name: "CardComponent",
  props: {},
  template: `
    <div class="card mb-4">
      <header class="card-header" v-if="$slots.header">
        <div class="card-header-title">
          <slot name="header"></slot>
        </div>
      </header>
      <div class="card-content">
        <slot></slot>
      </div>
      <footer class="card-footer" v-if="$slots.footer">
        <div class="card-footer-item">
          <slot name="footer"></slot>
        </div>
      </footer>
    </div>
  `,
  methods: {},
};
